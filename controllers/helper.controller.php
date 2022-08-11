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
     * @return string 
     */
    public static function amountSaveOnPurchase(int|float $price, int|float $offer, string $type):string
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
     * @return string
     */
    public static function finalOfferPrice(int|float $price, int|float $offer, string $type):string
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

    /**
     * @param int|float $price
     * @param int|float $offer
     * @param string $type [ Discount, Fixed ]
     * @return float
     */
    public static function offerDiscountPercentage(int|float $price, int|float $offer, string $type):float
    {
        $discount = 0.0;
        // Discounted offer
        if($type == 'Discount')
        {
            $discount = $offer;
        }

        // Fixed price offer
        if($type == 'Fixed')
        {
            $discount = $offer * 100 / $price;
        }
        return round($discount, 2);
    }

    public static function printRating(int $reviews = 0):void
    {
        if($reviews >= 1)
        {
            for($i=0; $i < 5; $i++){
                if($reviews < ($i + 1))
                {
                    echo '<option value="1">' . ($i + 1) . '</option>';
                }else{
                    echo '<option value="2">' . ($i + 1) . '</option>';
                }
            }
        }
        if($reviews == 0){
            for($i=0; $i < 5; $i++)
            {
                if($i == 0)
                {
                    echo '<option value="0">' . ($i + 1) . '</option>'; 
                }
                echo '<option value="1">' . ($i + 1) . '</option>'; 
            }
        }
    }

    public static function printNumberReviews(array $arrReviews = []):int
    {
        $c = 0;
        if(!is_null($arrReviews)){
            $c = count($arrReviews);
        }
        return $c;
    }
    
}

?>