@extends("layouts.app")


@section("content")
    @include('form')
    @csrf
        <div>
            <label for="">Title</label>
            <input type="text" name="title" id="title" value="{{old('title')}}">
            @error('title')
            <p class="error-message">{{$message}}</p>
        @enderror
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="5">{{old('description')}}</textarea>
            @error('description')
                <p class="error-message">{{$message}}</p>
            @enderror
        </div>
        
        <div>
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" cols="30" rows="10">{{old('long_description')}}</textarea>
            @error('long_description')
                <p class="error-message">{{$message}}</p>
            @enderror
        </div>

        <div>
            <button type="submit">Add Task</button>
        </div>
    </form>
@endsection