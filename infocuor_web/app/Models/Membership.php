namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname', 'dob', 'phone', 'email', 'address', 'department',
        'experience', 'interest', 'membership', 'fee', 'payment',
        'terms', 'consent', 'skills', 'motivation'
    ];
}
