<div class="card my-3">
            @if($users)
                <ul class="list-group list-group-flush">
                        @foreach($users as $key => $value)
                            <li class="list-group-item">{{$value['nome']}}
                                <span class="float-end">
                                <a type="button" class="btn btn-outline-info" href="/app/users">Info</a>
                                </span>
                            </li>
                        @endforeach
                </ul>
            @endif
</div>