<?php 
namespace App\Http\ViewComposers;

use App\Department;
use Illuminate\View\View;

class sidebarComposer
{
	public function compose(View $view)
	{   

		$view->with(['departments'=>Department::all()]);

        //dd($view);
	}

}


?>