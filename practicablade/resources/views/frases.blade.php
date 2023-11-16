@extends("layouts.main")
@section("titulo", "Frases")
@section("contenido")
    <h1>Las mejores frases del dia son:</h1>
    @component('_components.frase')
    @slot("frase", "El que ama, se hace humilde. Aquellos que aman, por decirlo de alguna manera, renuncian a una parte de su narcisismo")
    @slot("autor" , "Sigmund Freud")
    @endcomponent
    @component('_components.frase')
    @slot("frase", "El amor puede hacerlo todo, y también lo contrario de todo.")
    @slot("autor" , "Alberto Moravia")
    @endcomponent
    @component('_components.frase')
    @slot("frase", "El verdadero amor no es otra cosa que el deseo inevitable de ayudar al otro para que sea quien es")
    @slot("autor" , "Jorge Bucay")
    @endcomponent
@endsection
