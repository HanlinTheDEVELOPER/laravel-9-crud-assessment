@extends('Layout.app')

@section('body')
    <form class="w-screen p-20 flex flex-col gap-3" method="POST" onSubmit={{ url('/create') }}>
        <div class="w-full bg-green-400 py-2 text-center text-white text-3xl rounded">Please Fill The Form!</div>
        @csrf

        <div>
            @error('name')
                <span>
                    <small class="text-danger">
                        {{ $message }}
                    </small>
                </span>
            @enderror
            <input type="text" class="form-control @error('name')
        border-danger
            @enderror"
                placeholder='Enter first name' name='name'>
        </div>
        <div>
            @error('lastName')
                <span><small class="text-danger">{{ $message }}</small></span>
            @enderror
            <input type="text" class="form-control @error('lastName')
       border-danger
        @enderror"
                placeholder='Enter last name' name='lastName'>
        </div>
        <div>
            @error('job')
                <span><small class="text-danger">{{ $message }}</small></span>
            @enderror
            <input type="text" class="form-control @error('job')
       border-danger
        @enderror"
                placeholder='Enter job title' name='job'>
        </div>
        <div>
            @error('phone')
                <span><small class="text-danger">{{ $message }}</small></span>
            @enderror
            <input type="text" class="form-control @error('phone')
       border-danger
        @enderror"
                placeholder='Enter  phone number(+95 9xxxxxxxxx)' name='phone'>
        </div>
        <div>
            @error('address')
                <span><small class="text-danger">{{ $message }}</small></span>
            @enderror
            <input type="text" class="form-control @error('address')
       border-danger
        @enderror"
                placeholder='Enter  address' name='address'>
        </div>
        <div>
            @error('age')
                <span><small class="text-danger">{{ $message }}</small></span>
            @enderror
            <input type="number" class="form-control @error('age')
       border-danger
        @enderror"
                placeholder='Enter age' name='age'>
        </div>
        <input type="submit" class="form-control bg-green-500 text-white text-2xl font-semibold" value="Submit" />
    </form>
@endsection
