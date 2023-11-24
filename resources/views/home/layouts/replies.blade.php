@foreach ($comments as $comment)
    @if ($comment->user)
        <div class="display-comment text-white p-1 rounded">
            @auth
                @if (Auth::user()->hasRole('superadministrator') ||
                        Auth::user()->hasRole('administrator') ||
                        $comment->user_id == Auth::user()->id)
                    <a href="{{ route('comment.destroy', ['id' => $comment->id]) }}" class="btn btn-danger"
                        style=" float: right;margin-top: 15px;margin-bottom: 15px;padding: 10px 8px 10px 15px;
                        border-radius: 50%;"><i
                            class="ion-close"></i> </a>
                @endif
            @endauth
            <div class="item">
                <div class="user">
                    <figure>
                        <img src="{{ asset('storage/users/.' . $comment->user->img) }}">
                    </figure>
                    <div class="details">
                        <h5 class="name">{{ $comment->user->name }}</h5>
                        <div class="time">{{ $comment->created_at->diffForHumans() }}</div>
                        <div class="description">
                            {{ $comment->comment }}
                        </div>
                    </div>
                </div>
                <div class="reply-list">
                    @if ($comment->replies->count() > 0)
                        <div style="margin-left: 75px">
                            Replies:
                            @include('home.layouts.replies', ['comments' => $comment->replies])
                        </div>
                    @endif
                    @if ($comment->parent_id == null)
                        <div style="margin-left: 75px">
                            <a href="" id="reply"></a>
                            @auth
                                <form method="post" action="{{ route('comment.reply') }}">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="comment" class="form-control" />
                                        <input type="hidden" name="ad_id" value="{{ $ad_id }}" />
                                        <input type="hidden" name="comment_id" value="{{ $comment->id }}" />
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-primary" style="font-size: 0.8em;"
                                            value="Reply" />
                                    </div>
                                </form>
                            @endauth
                        </div>
                        <hr>
                    @endif
                </div>
            </div>
        </div>
    @endif
@endforeach
