

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
  <center>
    <div class="btn btn-secondary">
 <h1> ajouter un projet</h1>
</div>
<div class="container py-6">

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">
              <div class="card-header">{{ __('projet') }}</div>

              <div class="card-body">
                <form  action="projet"id="contactForm" method="POST" enctype="multipart/form-data">
                  @csrf

                  <div class="row mb-3">
                          <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('nom') }}</label>

                          <div class="col-md-6">
                              <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('name') }}" required autocomplete="name" autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>


                      <div class="row mb-3">
                          <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('description') }}</label>

                          <div class="col-md-6">
                              <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('name') }}" required autocomplete="name" autofocus>

                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="row mb-3">
                          <label for="datedebut" class="col-md-4 col-form-label text-md-end">{{ __('date debut') }}</label>

                          <div class="col-md-6">
                              <input id="datedebut" type="date" class="form-control @error('tel') is-invalid @enderror" name="datedebut" value="{{ old('datedebut') }}" required autocomplete="tel" autofocus>

                              @error('datedebut')
                                  <span class="invalid-feedback" tel="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      <div class="row mb-3">
                        <label for="datefin" class="col-md-4 col-form-label text-md-end">{{ __('date fin') }}</label>

                        <div class="col-md-6">
                            <input id="tel" type="date" class="form-control @error('tel') is-invalid @enderror" name="datefin" value="{{ old('tel') }}" required autocomplete="tel" autofocus>

                            @error('datefin')
                                <span class="invalid-feedback" tel="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                     
                      <div class="row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-secondarygg">
                                  {{ __('enregistrer') }}

                              </button>
                                      
                          </div>
                         
                      </div>
                     
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
<center><h1>Liste des projets</h1></center>

               


<table class="table"  >
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">nom </th>
                        <th scope="col">description</th>
                        <th scope="col">niveau</th>
                        <th scope="col">age</th>
                        <th scope="col">option </th>
                     
                        

                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($projet as $m)
                    
                      <tr>
                       
                       
                        
                        <th scope="row">@php echo $m->id @endphp</th>
                        <td>@php echo $m->nom @endphp</td>
                        <td>@php echo $m->description @endphp</td>
                        <td>@php echo $m->datedebut @endphp</td>
                        <td>@php echo $m->datefin @endphp</td>
                       
                        
                         
                         {{-- <input type="hidden" value="{{ $m->id }}" name="iduser"> --}}
                        <td>
                        <a href="{{'detail/'.$m->id}}" class="button btn btn-info">Detail</a>
                       
                    </td>
                    </form>
                      <!-- <form action="/supprimerprojet"method="POST">
                        @csrf 
                       <input type="hidden" value="{{ $m->id }}" name="idprojet"> 
                       <td><button name="delete" class="button btn btn-danger">supprimer</button></td>
                      </form> -->
                      </tr>
                    
                   
                    @endforeach
                    </tbody>
                  
                  </table>



</body>
</html>