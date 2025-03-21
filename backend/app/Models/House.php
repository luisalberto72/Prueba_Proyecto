<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'Title', 'Price', 'City', 'Address', 'Email', 'Phone_number', 'Description', 'Status', 'Type', 'HouseImage1', 'user_id'
    ];
}
