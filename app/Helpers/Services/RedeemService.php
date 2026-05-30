<?php
declare(strict_types=1);

namespace App\Helpers\Services;

/**
 * @file app/Helpers/Services/RedeemService.php
 *
 * Copyright (c) 2017-2026 Sangia Publishing House
 * Copyright (c) 2017-2026 Rochmady
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 * 
 * @class RedeemService
 * 
 * @brief Layanan pengelola dompet loyalti dan penukaran poin.
 */

import('core.Modules.redeem.RewardPointDAO');

class RedeemService {

    /** @var RewardPointDAO */
    private RewardPointDAO $rewardDao;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->rewardDao = new RewardPointDAO();
    }

    /**
     * Mendapatkan saldo poin pengguna.
     * @param int $userId
     * @return int
     */
    public function getUserBalance(int $userId): int {
        return $this->rewardDao->getBalanceByUserId($userId);
    }

    /**
     * Mendapatkan riwayat transaksi poin pengguna.
     * @param int $userId
     * @return array
     */
    public function getUserHistory(int $userId): array {
        return $this->rewardDao->getHistoryByUserId($userId);
    }

    /**
     * Menukarkan poin menjadi Diskon/Voucher.
     * @param int $userId
     * @param int $pointsToRedeem
     * @param int $invoiceId
     * @return bool
     */
    public function exchangePoints(int $userId, int $pointsToRedeem, int $invoiceId = 0): bool {
        if ($pointsToRedeem <= 0) {
            return false;
        }

        $currentBalance = $this->getUserBalance($userId);

        // Keamanan Lapis 1: Mencegah saldo minus
        if ($currentBalance < $pointsToRedeem) {
            throw new \Exception('Insufficient balance.');
        }

        // Catat transaksi sebagai angka negatif (pengurangan saldo)
        $negativeAmount = -$pointsToRedeem;
        
        return $this->rewardDao->insertTransaction($userId, $negativeAmount, 'redeemed_discount', $invoiceId);
    }

    /**
     * Menghitung diskon yang dapat diterapkan berdasarkan saldo poin pengguna.
     * @param int $userId
     * @param float $subtotal
     * @return float
     */
    public function calculateApplicableDiscount(int $userId, float $subtotal): float {
        // Konversi poin ke nominal mata uang. Misal: 1 Poin = Rp 1.000 / $0.1
        $conversionRate = (float) Config::getVar('billing', 'point_conversion_rate') ?: 1000.0;
        
        // Asumsi user mencentang "Gunakan Saldo Poin" di sesi keranjang (bisa ditarik dari CartService)
        // Untuk contoh ini, kita batasi stub.
        $discountAmount = 0.0; 
        
        return min($discountAmount, $subtotal);
    }
}
?>