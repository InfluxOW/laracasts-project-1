<h3 class="font-medium text-lg mb-4">Friends</h3>
<ul>
    @foreach (range(1,8) as $item)
        <li>
            <div class="flex items-center text-sm mb-4">
                <img src="https://api.adorable.io/avatars/40/abott@adorable.png" alt="" class="rounded-full mr-2">
                Random Name
            </div>
        </li>
    @endforeach
</ul>
