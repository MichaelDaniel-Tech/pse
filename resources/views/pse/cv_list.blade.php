@extends('layouts.app')

@section('content')
    <div class="card offset-3 col-6">
        <div class="card-body">

            @if (session('success'))
                <div class="alert alert-success" role="alert">{{ session('success') }}</div>
            @endif

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-success btn-sm" href="{{ route('cv_new') }}"><i class="fa fa-plus"></i> New Call
                    Visit</a>

                <table class="table table-bordered table-stripped mt-4">
                    <thead>
                        <tr>
                            <th width="80px">No</th>
                            <th>Visit Date</th>
                            <th>Topic</th>
                            <th>Next Date</th>
                            <th>Next Topic</th>
                            <th>Type</th>
                            <th>Customer</th>
                            <th>PIC</th>
                            <th>Qty</th>
                            <th>Phone</th>
                            <th>Location</th>
                            <th>Remark</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($callvisits as $callvisit)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $callvisit->visitdate }}</td>
                                <td>{{ $callvisit->topic }}</td>
                                <td>{{ $callvisit->nextvisit }}</td>
                                <td>{{ $callvisit->nexttopic }}</td>
                                <td>{{ $callvisit->type }}</td>
                                <td>{{ $callvisit->customer }}</td>
                                <td>{{ $callvisit->pic }}</td>
                                <td>{{ $callvisit->qty }}</td>
                                <td>{{ $callvisit->phone }}</td>
                                <td>{{ $callvisit->location }}</td>
                                <td>{{ $callvisit->remark }}</td>
                                <td>
                                    <form action="{{ route('callvisits.destroy', $callvisit->id) }}" method="POST">
                                        <a class="btn btn-info btn-sm"
                                            href="{{ route('callvisits.show', $callvisit->id) }}"><i
                                                class="fa-solid fa-list"></i> Show</a>
                                        <a class="btn btn-primary btn-sm"
                                            href="{{ route('callvisits.edit', $callvisit->id) }}"><i
                                                class="fa-solid fa-pen-to-square"></i> Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i
                                                class="fa-solid fa-trash"></i>Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="12">No records found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {!! $callvisits->links() !!}
            </div>
        </div>
    </div>
@endsection
