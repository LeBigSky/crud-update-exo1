<section>
    <h1> Ajouter un animal</h1>
        <div class="container d-flex justify-content-center gap-2">
            
            <form class="d-flex gap-2" action="{{ route('store.animal') }}" method="POST">
            @csrf
            <div>
                <label for="espece">Espece</label>
                <input type="text" name="espece" id="espece">
            </div>
         
            <div>
                <label for="age">Age</label>
                <input type="number" name="age" id="age">
            </div>
            <button type="submit">Ajouter l'animal</button> 
            </form>
    </div>
    </section>