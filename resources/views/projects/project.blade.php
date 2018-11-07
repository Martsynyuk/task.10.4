@extends('layouts.layout')

@section('content')
    <form action="{{ url('/project/form/' . (isset($project->id) ? $project->id : '')) }}" method="POST">
        {{ csrf_field() }}
        <div class="col-md-3">
            <label>Name :
                <input type="text" name="name" value="{{ isset($project->id) ? $project->name : '' }}">
            </label>
            <label>Description :
                <input type="text" name="description" value="{{ isset($project->description) ? $project->description : '' }}">
            </label>
            <label>Status :
                <select name="status">
                    <option disabled>Choose status</option>

                    {{ isset($project->status) ? $active = $project->status : $active = '' }}

                    <?php foreach(\App\Projects::getStatuses() as $status) : ?>
                        <option value="<?= $status; ?>"
                            <?= ($active == $status) ? 'selected' : ''?>
                        ><?= $status; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </label>
        </div>

        <div>
            <input type="submit">
        </div>
    </form>
@endsection