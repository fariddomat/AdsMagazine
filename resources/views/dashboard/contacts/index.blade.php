@extends('dashboard._layouts._app')

@section('content')
    <!-- Striped rows start -->
    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-header">
                    <h4 class="card-title">All contacts</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            {{-- <li><a data-action="close"><i class="ft-x"></i></a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">


                    @if ($contacts->count() == 0)
                        <div class="table-responsive">
                            <h3 class="mr-3 mb-3" ">no data found</h3>
                            </div>
@else
    <div class="table-responsive">
                                <table class="table table-striped table-scrollable">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Ads</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">email</th>
                                            <th scope="col">subject</th>
                                            <th scope="col">message</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                          @foreach ($contacts as $index=> $contact)
                                <tr>
                                    <th scope="row">{{ $index + 1 }}</th>
                                    <td dir="rtl">{{ $contact->ad->title }}</td>
                                    <td dir="rtl">{{ $contact->name }}</td>
                                    <td dir="rtl">{{ $contact->email }}</td>
                                    <td dir="rtl">{{ $contact->subject }}</td>
                                    <td dir="rtl">{{ $contact->message }}</td>
                                    <td class="form-group"
                                        style="  display: flex;
                                        word-wrap: inherit;border: none;">
                                        @if (Auth::user()->hasRole('user'))
                                            {{ $contact->status }}
                                        @else
                                            @if ($contact->status == 'unread')
                                                <a href="{{ route('dashboard.contacts.view', $contact->id) }}"
                                                    type="button" class="btn btn-icon btn-success btn-sm mr-1"
                                                    style="  min-width: 100px;">Mark as read <i class="fa fa-eye"
                                                        style="position: relative;"></i></a>
                                            @else
                                                {{ $contact->status }}
                                            @endif
                                        @endif
                                    </td>
                                </tr>
                    @endforeach

                    </tbody>
                    </table>
                </div>
                {{-- <div class="text-center m-auto">{{ $contacts->appends(request()->query())->links() }}
                    </div> --}}
                @endif


            </div>
        </div>
    </div>
    </div>
    <!-- Striped rows end -->
@endsection
