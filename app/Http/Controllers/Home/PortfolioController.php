<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    protected $portfolio;
    public function managePortfolio()
    {
        $this->portfolio = Portfolio::latest()->get();
        return view('admin.portfolio-module.manage',['portfolio'=>$this->portfolio]);
    }

    public function addPortfolio()
    {
        return view('admin.portfolio-module.add');
    }

    public function savePortfolio(Request $request)
    {
        Portfolio::savePortfolio($request);
        return redirect()->back()->with('massage','portfolio save successful');
    }

    public function editPortfolio($id)
    {
        $this->portfolio = Portfolio::find($id);
        return view('admin.portfolio-module.edit',['portfolio'=>$this->portfolio]);
    }

    public function updatePortfolio(Request $request,$id)
    {
        Portfolio::updatePortfolio($request,$id);
        return redirect()->route('manage.portfolio')->with('massage','portfolio update successful');
    }

    public function deletePortfolio($id)
    {
        $this->portfolio = Portfolio::find($id);
        unlink($this->portfolio->portfolio_image);
        $this->portfolio->delete();
        return redirect()->route('manage.portfolio')->with('massage','portfolio delete successful');
    }
}
