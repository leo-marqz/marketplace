<?php

/**
 * @author LeoMarqz <leomarqz2020@gmail.com>
 */
class HelperController
{

    /**
     * @param int|float $price
     * @param int|float $offer
     * @param string $type [ Discount, Fixed ]
     * @return float 
     */
    public static function amountSaveOnPurchase(int|float $price, int|float $offer, string $type):float
    {
        $save = 0;
        // Discounted offer
        if($type == 'Discount')
        {
            $save = ($price / 100) * $offer;
        }

        // Fixed price offer
        if($type == 'Fixed')
        {
            $save = $price - $offer;
        }

        return number_format($save, 2);
    }

    
    /**
     * @param int|float $price
     * @param int|float $offer
     * @param string $type [ Discount, Fixed ]
     * @return float
     */
    public static function finalOfferPrice(int|float $price, int|float $offer, string $type):float
    {
        $total = 0.0;
        // Discounted offer
        if($type == 'Discount')
        {
            $save = ($price / 100) * $offer;
            $total = $price - $save;
        }

        // Fixed price offer
        if($type == 'Fixed')
        {
            $total = $offer;
        }

        return number_format($total, 2);
    }

    /**
     * @param array|null $reviews
     */
    public static function averageReviews(array|null $reviews):int
    {
        $averageReviews = 0;
        $sumReviews = 0;
        if(!is_null($reviews))
        {
            foreach ($reviews as $review) {
                $sumReviews += $review['review'];
            }
            $averageReviews = intval($sumReviews / count($reviews));
        }
        return $averageReviews;
        
    }


}

?>