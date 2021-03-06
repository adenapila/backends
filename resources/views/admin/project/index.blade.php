@extends('admin.default')

@section('page-header')
    <br> Project <small>{{ trans('app.manage') }}</small>
@endsection

@section('content')

<div class="mB-20">
    <a href="{{ route(ADMIN . '.project.create') }}" class="btn btn-info">
        {{ trans('app.add_button') }}
    </a>

    <a href="{{ route(ADMIN . '.unit.index') }}" class="btn btn-info">
        {{ trans('app.view_unit') }}
    </a>
    
</div>

<div class="row">
    <div class="col-md-12">
      <div class="bgc-white bd bdrs-3 p-20 mB-20">
        <table id="dataTable" class="table table-striped table-bordered" cellspacing="100" width="100%">
            
                <thead>
                    <tr>
                        <th>Branch Code</th>
                        <th>Name</th>
                        <th>Discount</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td><a href="{{ route(ADMIN . '.project.edit', $item->id) }}">{{ $item->branchcode }}</a></td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->disc }}</td>
                            <td>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="{{ route(ADMIN . '.project.edit', $item->id) }}" title="{{ trans('app.edit_title') }}" class="btn btn-primary btn-sm"><span class="ti-pencil"></span></a></li>
                                    <li class="list-inline-item">
                                        {!! Form::open([
                                            'class'=>'delete',
                                            'url'  => route(ADMIN . '.project.destroy', $item->id), 
                                            'method' => 'DELETE',
                                            ]) 
                                        !!}

                                            <button class="btn btn-danger btn-sm" title="{{ trans('app.delete_title') }}"><i class="ti-trash"></i></button>
                                            
                                        {!! Form::close() !!}
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    @endforeach
                </tbody>                                  
        </table>
      </div>
    </div>
  </div>
@endsection