namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HireForm extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'event_name',
        'event_type_day_or_night',
        'event_type_indoor_outdoor',
        'location',
        'faculty_department',
        'expected_duration',
        'expected_audience',
        'date',
        'time',
        'requirements',
        'photography_type',
        'videography_type',
    ];

    protected $casts = [
        'requirements' => 'array',
        'photography_type' => 'array',
        'videography_type' => 'array',
    ];
}


