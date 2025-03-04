 
@extends('layouts.default', [
    'title' => 'Users'
])

@section('css')
    <style>
        img.headshot {
            background: var(--headshot_bg);
            border-radius: 50%;
        }

        @media only screen and (min-width: 768px) {
            img.headshot {
                width: 60px;
            }
        }

        .user {
            padding-top: 12px;
            padding-bottom: 12px;
        }

        .user:not(:last-child) {
            border-bottom: 1px solid var(--divider_color);
        }
    </style>
@endsection

@section('content')
    <h3>Users</h3>
    <div class="row mb-3">
        <div class="col-8 col-md-10">
            <form action="{{ route('users.index', $category) }}" method="GET">
                <div class="input-group">
                    <input class="form-control" type="text" name="search" placeholder="Search for users..." value="{{ request()->search }}">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit">
                            <i class="fas fa-search"></i>
                            <span class="hide-sm">Search</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-4 col-md-2">
            <a href="{{ route('users.index', $button['category']) }}" class="btn btn-block btn-primary">{{ $button['text'] }}</a>
        </div>
    </div>
    <div class="card mt-3">
        <div class="card-body" @if ($users->count() > 0) style="padding-top:10px;padding-bottom:10px;" @endif>
            @forelse ($users as $user)
                <div class="user row">
                    <div class="col-3 col-md-2 align-self-center text-center">
                        <a href="{{ route('users.profile', $user->username) }}" style="color:inherit;">
                            <img class="headshot" src="{{ $user->headshot() }}">
                            <div class="text-truncate mt-1">{{ $user->username }}</div>
                        </a>
                    </div>
                    <div class="col-6 col-md-9 align-self-center">
                        <div class="text-truncate">{!! ($user->description) ? e($user->description) : '<span class="text-muted">This user does not have a description.</span>' !!}</div>
                    </div>
                    <div class="col-3 col-md-1 align-self-center text-right text-{{ ($user->online()) ? 'success' : 'muted' }}">{{ ($user->online()) ? 'Online' : 'Offline' }}</div>
                </div>
            @empty
                <p>No users have been found.</p>
            @endforelse
        </div>
    </div>
    {{ $users->onEachSide(1) }}
@endsection
