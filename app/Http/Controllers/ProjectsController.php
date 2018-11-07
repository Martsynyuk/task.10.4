<?php
/**
 * Created by PhpStorm.
 * User: antonmartsyniuk
 * Date: 11/6/18
 * Time: 20:27
 */

namespace App\Http\Controllers;

use App\Projects;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function showProjects()
    {
        return view('projects.all', ['projects' => Projects::on()->paginate(15)]);
    }

    public function showProject($id = 0)
    {
        if ($id != 0) {
            return view('projects.project', [
                'project'  => Projects::on()->findOrFail($id),
                'statuses' => Projects::getStatuses()
            ]);
        }

        return view('projects.project', [
            'project'  => [],
        ]);
    }

    public function addOrUpdateProject(Request $request, $id = false)
    {
        $this->validate($request, [
            'status' => 'in:' . implode(',', Projects::getStatuses())
        ]);

        if ($id !== false) {
            $project = Projects::on()->find($id);
        } else {
            $project = new Projects();
        }

        $project->name         = $request->name;
        $project->description  = $request->description;
        $project->status       = $request->status;

        $project->save();

        return redirect()->action('ProjectsController@showProjects');
    }

    public function deleteProject($id)
    {
        Projects::on()->find($id)->delete();
        return redirect()->action('ProjectsController@showProjects');
    }
}