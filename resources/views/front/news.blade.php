
 <!-- Se extiende de la estructura principal-->
@extends('front.main')
 <!-- Se declara la seccion contenido, dónde van las noticias-->
@section('content')

    <div class="container container-news">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="page-header">
                    <div class="col-md-12 col-12">
                        <h4>NOTAS ACTUALES</h4>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <table class="table table-hover table-striped row">
                        <tbody class="col-md-12 col-12">
                             <!-- Se añaden las notas, recorriendolas-->
                        @foreach($news as $new)
                            <tr class="row">
                                <td class="col-md-3 col-5 title"><strong> {{ $new->title }} </strong></td>
                                <td class="col-md-2 col-5 date"> {{ $new->date }} </td>
                                <td class="col-md-4 col-4 description"> {{ $new->description }} </td>
                                <td class="col-md-2 col-2 name"> {{ $new->name }} </td>
                                <td class="col-md-1 col-1 moreinfo"> <a href="/new/{{$new->id_new}}"><span class="material-icons">add</span></a> </td>
                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                     <!-- Se añade el paginador-->
                    {{ $news->render() }}
                </div>
            </div>
        </div>
    </div>
    @endsection
