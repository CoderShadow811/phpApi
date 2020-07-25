<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;




class Bill extends Model
{
    protected $table = "billing";
    protected $fillable = ['state','total','name','mail','streetaddress','State','city','region','postalCode','webdesign','webdesigntotal','digitalmarketing','digitalmarketingtotal','audiovisual','audiovisualtotal','graphicdesign','graphicdesigntotal','branding','brandingtotal','marketingstrategies','marketingstrategiestotal','statebilling','stateVariant','total'];
}

?>
