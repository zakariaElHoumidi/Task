<div>
    <h3 class="text-center">My Task ( {{ $task_count }} )</h3>

    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Completed</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{ $task->title}}</td>
                    <td>
                        <span class="badge {{ $task->status !== "pending" ? "text-bg-primary" : "text-bg-danger"}}">{{ $task->status!== "pending" ? 'Yes' : 'No' }}</span>
                    </td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn border-0" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-ellipsis"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu">
                                <li class="d-flex justify-content-around align-content-center">
                                    <button class="btn btn-primary" href="#">
                                        <i class="fa-regular fa-eye"></i>
                                    </button>

                                    <button class="btn btn-danger" wire:click.prevent="deleteTask({{$task->id}})">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <div class="btn-group dropstart">
                            <button type="button" class="btn shadow-none border-0" data-bs-toggle="dropdown" aria-expanded="false">

                            </button>
                            <ul class="dropdown-menu">
                                <li>

                                </li>
                                <li></li>
                                <li>

                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $tasks->links() }}
</div>
