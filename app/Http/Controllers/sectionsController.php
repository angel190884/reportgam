<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Section;
use App\Subsection;
use App\Http\Requests;

class sectionsController extends Controller
{
    public function store(){
        $sections = Section::orderBy('id', 'ASC')->get();

        foreach ($sections as $key => $section) {
            $subsections=SubSection::where('section_id',$section->id)->get();
            $array[] = array("section" => $section->name,"subsections" => $subsections);
        }
        return ['responsesection'=>[['sections'=>$array]]];
    }
}
