<div class="panel panel-default">
    <div class="panel-body">
        <a href="{{ route('topics.create') }}" class="btn btn-success btn-block" aria-label="Left Align">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 新建帖子
        </a>
    </div>
</div>

@if (count($active_users))
    <div class="panel panel-default">
        <div class="panel-body active-users">

            <div class="text-center">活跃用户</div>
            <hr>
            @foreach ($active_users as $active_user)
                <a class="media" href="{{ route('users.show', $active_user->id) }}">
                    <div class="media-left media-middle">
                        <img src="{{ $active_user->avatar }}" width="24" height="24" class="img-circle media-object">
                    </div>

                    <div class="media-body">
                        <span class="media-heading">{{ $active_user->name }}</span>
                    </div>
                </a>
            @endforeach

        </div>
    </div>
@endif

@if (count($links))
    <div class="panel panel-default">
        <div class="panel-body sidebar-resources">

            <div class="text-center">推荐资源</div>
            <hr>
            @foreach ($links as $link)
                <a class="media" href="{{ $link->link }}" target="_blank">
                    <div class="media-left media-middle">
                        <img src="{{ $link->icon }}" width="20" height="20" class="media-object">
                    </div>

                    <div class="media-body">
                        <span class="media-heading">{{ $link->title }}</span>
                    </div>
                </a>
            @endforeach

        </div>
    </div>
@endif

<div class="panel panel-default" style="color:#a5a5a5">
    <div class="panel-body text-center">
        <a href="mailto:{{ setting('contact_email') }}" style="color:#a5a5a5">
          <span style="margin-top: 3px;display: inline-block;">
              <i class="fa fa-heart" aria-hidden="true" style="color: rgba(232, 146, 136, 0.89);"></i> 建议反馈？请私信 起风
          </span>
        </a>
    </div>
</div>