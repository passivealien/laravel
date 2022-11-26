@extends('layout')

@section('content')


    this is my dashboard
    <?php echo $title; ?>
<div class = "row">
    <?php foreach($students as $student): ?>
        <div class="card" style="width: 18rem">
            <div class="card-body">
                <?php echo $student['firstname'].'<br>'; ?>
            </div>
            <button>test</button>
        </div>
    <?php endforeach; ?>
</div>
@endsection