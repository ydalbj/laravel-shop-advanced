<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CrowdfundingProduct extends Model
{
    const STATUS_FUNDING = 'funding';
    const STATUS_SUCCESS = 'success';
    const STATUS_FAIL = 'fail';

    protected $statusMap = [
        self::STATUS_FUNDING => '众筹中',
        self::STATUS_SUCCESS => '众筹成功',
        self::STATUS_FAIL => '众筹失败',
    ];

    protected $fillable = ['target_amount', 'total_amount', 'user_count', 'status', 'end_at'];

    protected $dates = ['end_at'];

    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getPercentAttribute()
    {
        $percent = $this->total_amount / $this->target_amount;

        return floatValue(number_format($percent, 2, '.', ','));
    }
}
