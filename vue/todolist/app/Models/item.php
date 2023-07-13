<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;

    // 타입 퀘스트
    // 이거 안넣어주면 true, false로 안넘어오고 0으로 넘어옴
    protected $casts = [
        'completed' => 'boolean',
    ];

    // comoleted_at를 데이트 설정에 추가
    protected $dates = [
        'completed_at',
    ];

    // api로 json을 파싱할 때 데이터를 timezone에 맞추가 위한 설정
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
