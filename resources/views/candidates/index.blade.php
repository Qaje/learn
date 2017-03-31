
 <h1>Candidates</h1>
 <div>
  @foreach ($candidates as $candidate)


   <h2>
    <a href="{{ url('/candidates', $candidate->id) }}">
     {{ $candidate->name }}
    </a>
   </h2>
   <a href="{{ route('candidates.edit', $candidate->id) }}">
    Edit candidate
   </a>
   <div class='body'>
    <pre>{{ $candidate }}</pre>
   </div>


   <p>There are no candidates to display!</p>
  @endforeach
 </div>
