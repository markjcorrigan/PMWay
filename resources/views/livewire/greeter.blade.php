<section class="w-full px-0 mx-0">
    {{--    <x-page-heading>--}}
    {{--        <x-slot:title>--}}

    {{--        </x-slot:title>--}}
    {{--        <x-slot:subtitle>--}}
    {{--           --}}
    {{--        </x-slot:subtitle>--}}
    {{--        <x-slot:buttons>--}}

    {{--        </x-slot:buttons>--}}
    {{--    </x-page-heading>--}}

    <div>
        <div>

            <div class="grid grid-cols-12">
                <div class="col-start-3 col-span-5">  <form wire:submit="changeName()" class="" >
                        <flux:select custom wire:model="greeting">
                            <option value="Hello">Hello</option>
                            <option value="Hi">Hi</option>
                            <option value="Hey">Hey</option>
                            <option value="Howdy" selected>Howdy</option>
                        </flux:select>
                        <flux:separator horizontal class="my-2 border-0" variant="subtle" />
                        <flux:input type="text" class="border rounded-md text-white" wire:model="name" >
                        </flux:input>
                        <flux:separator horizontal class="my-2 border-0" variant="subtle" />
                        <flux:button variant="primary" type="submit" class="text-white font-medium rounded-md px-4 py-2 bg-grey-600" >
                            Greet
                        </flux:button>
                    </form>
                    @if ($name !== '')
                        <div>
                            {{$greeting}}, {{$name}}!
                        </div>
                    @endif</div>
            </div>


        </div>


        <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


    <div class="grid grid-cols-12 grid-rows-4 gap-2 bg-black">
        <!-- Row 1 -->
        <div class="col-span-1 text-white">Col 1</div>
        <div class="col-span-1 text-white">Col 2</div>
        <div class="col-span-1 text-white">Col 3</div>
        <div class="col-span-1 text-white">Col 4</div>
        <div class="col-span-1 text-white">Col 5</div>
        <div class="col-span-1 text-white">Col 6</div>
        <div class="col-span-1 text-white">Col 7</div>
        <div class="col-span-1 text-white">Col 8</div>
        <div class="col-span-1 text-white">Col 9</div>
        <div class="col-span-1 text-white">Col 10</div>
        <div class="col-span-1 text-white">Col 11</div>
        <div class="col-span-1 text-white">Col 12</div>

        <!-- Row 2 -->
        <div class="col-span-1 text-white">Col 1</div>
        <div class="col-span-1 text-white">Col 2</div>
        <div class="col-span-1 text-white">Col 3</div>
        <div class="col-span-1 text-white">Col 4</div>
        <div class="col-span-1 text-white">Col 5</div>
        <div class="col-span-1 text-white">Col 6</div>
        <div class="col-span-1 text-white">Col 7</div>
        <div class="col-span-1 text-white">Col 8</div>
        <div class="col-span-1 text-white">Col 9</div>
        <div class="col-span-1 text-white">Col 10</div>
        <div class="col-span-1 text-white">Col 11</div>
        <div class="col-span-1 text-white">Col 12</div>

        <!-- Row 3 -->
        <div class="col-span-1 text-white">Col 1</div>
        <div class="col-span-1 text-white">Col 2</div>
        <div class="col-span-1 text-white">Col 3</div>
        <div class="col-span-1 text-white">Col 4</div>
        <div class="col-span-1 text-white">Col 5</div>
        <div class="col-span-1 text-white">Col 6</div>
        <div class="col-span-1 text-white">Col 7</div>
        <div class="col-span-1 text-white">Col 8</div>
        <div class="col-span-1 text-white">Col 9</div>
        <div class="col-span-1 text-white">Col 10</div>
        <div class="col-span-1 text-white">Col 11</div>
        <div class="col-span-1 text-white">Col 12</div>

        <!-- Row 4 -->
        <div class="col-span-1 text-white">Col 1</div>
        <div class="col-span-1 text-white">Col 2</div>
        <div class="col-span-1 text-white">Col 3</div>
        <div class="col-span-1 text-white">Col 4</div>
        <div class="col-span-1 text-white">Col 5</div>
        <div class="col-span-1 text-white">Col 6</div>
        <div class="col-span-1 text-white">Col 7</div>
        <div class="col-span-1 text-white">Col 8</div>
        <div class="col-span-1 text-white">Col 9</div>
        <div class="col-span-1 text-white">Col 10</div>
        <div class="col-span-1 text-white">Col 11</div>
        <div class="col-span-1 text-white">Col 12</div>
    </div>


    <h2 class="text-4x1 font-bold text-center py-8">
        Flexbox
    </h2>

    <div class="flex flex-wrap">
        <div class="bg-red-500 text-white h-26">
            <p>
                Flex Item 1
            </p>
        </div>
        <div class="bg-blue-500 text-white h-26">
            <p>
                Flex Item 2
            </p>
        </div>
        <div class="bg-yellow-500 text-white h-26">
            <p>
                Flex Item 3
            </p>
        </div>
    </div>


</section>
