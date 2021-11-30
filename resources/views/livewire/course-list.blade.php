<div class="grid grid-cols-3 gap-4 md:grid-cols-3 mt-8">
    @foreach($courses as $c)
       <x-course-card :c="$c" />
    @endforeach
</div>
