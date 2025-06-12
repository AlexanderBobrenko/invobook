
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_name',
        'client_email',
        'client_phone',
        'service_type',
        'project_title',
        'project_description',
        'budget',
        'timeline',
        'status',
        'admin_notes'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public static function getServiceTypes()
    {
        return [
            'software' => 'Разработка ПО',
            'mobile' => 'Мобильные приложения',
            'web' => 'Веб-приложения',
            'ai_bigdata' => 'AI & Big Data',
            'support' => 'Техническая поддержка',
            'consulting' => 'Консультации'
        ];
    }

    public static function getStatuses()
    {
        return [
            'new' => 'Новый',
            'in_review' => 'На рассмотрении',
            'approved' => 'Одобрен',
            'in_progress' => 'В работе',
            'completed' => 'Завершен',
            'cancelled' => 'Отменен'
        ];
    }

    public function getServiceTypeTextAttribute()
    {
        return self::getServiceTypes()[$this->service_type] ?? $this->service_type;
    }

    public function getStatusTextAttribute()
    {
        return self::getStatuses()[$this->status] ?? $this->status;
    }
}
