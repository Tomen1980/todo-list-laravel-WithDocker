@extends("layouts.app")

@section("title","Edit Task")



@section("content")
    @include('form',['task'=>$task])
   
    @csrf
    @method('PUT')
        <div>
            <label for="">Title</label>
            <input type="text" name="title" id="title" value="{{$task->title}}">
            @error('title')
            <p class="error-message">{{$message}}</p>
        @enderror
        </div>

        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description" cols="30" rows="5">{{$task->description}}</textarea>
            @error('description')
                <p class="error-message">{{$message}}</p>
            @enderror
        </div>
        
        <div>
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" cols="30" rows="10"> {{$task->long_description}} </textarea>
            @error('long_description')
                <p class="error-message">{{$message}}</p>
            @enderror
        </div>

        <div>
            <button type="submit">Edit Task</button>
        </div>
    </form>
@endsection