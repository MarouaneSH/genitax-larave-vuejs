<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class ApiController extends Controller
{
    public function test() {
         //get first level categories
        $level_1 = Category::where('level',1)->get();

        $level_items = [];
        foreach($level_1  as $level) {
            array_push($level_items, $level);
            $nested_level =  Category::where('parent_id',$level->id)->orderBy("level")->get();
            $nested_counter = 0;
            foreach($nested_level as $nested) {
            
                if( $nested_counter == 0) {
                    $level_items[sizeof($level_items) - 1]->child = $nested;
                } else {
                    dd( $this->nested( $level_items[sizeof($level_items) - 1] , "test->tes"));
                    $level_items[sizeof($level_items) - 1] =  $this->nested( $level_items[sizeof($level_items) - 1] , "test->tes");

                }
                $nested_counter++;
            
            }
        }

        return    $level_items;
    }

    function nested($obj, $path_str)
    {
        $val = null;
    
        $path = preg_split('/->/', $path_str);
        $node = $obj;
        while (($prop = array_shift($path)) !== null) {
            if (!is_object($obj) || !isset($node, $prop)) {
                $val = null;
                break;
    
            }
            $val = $node->$prop;
            // TODO: Insert any logic here for cleaning up $val
    
            $node = $node->$prop;
        }
    
        return $val;
    }


}
