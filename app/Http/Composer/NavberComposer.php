<?php

namespace App\Http\Composer;

use App\Model\Catagory;
use Illuminate\Contracts\View\View;
class  NavberComposer
{
  public function compose(View $view){
      $view->with('categoris',Catagory::all());
  }

}
