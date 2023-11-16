 @extends("layouts.landing")

 @section("title", "Services")

 @section("content")
    <h1>Services</h1>
    @component("_components.card")
        @slot("title", "Service 1");
        @slot("content", "lorem ipsum dolor set aimet")
    @endcomponent
    @component("_components.card")
        @slot("title", "Service 2");
        @slot("content", "lorem ipsum.")
    @endcomponent
    @component("_components.card")
        @slot("title", "Service 3");
        @slot("content", "lorem ipsum 3.")
    @endcomponent
 @endsection

