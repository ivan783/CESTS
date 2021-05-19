<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('img/home/home.jpg')}})"> 
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36 ">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-fold text-4xl">Se un experto en la tecnologia con CEST</h1>
                <p class="text-white text-lg mt-4">En CEST tendras cursos, eventos, seminarios y talleres. te ayudaran a ser un profecionl de primer nivel.</p>
                 <!-- component -->
                     <div class="pt-2 relative text-gray-600">
                           <input type="search" name="serch" placeholder="Buscar" class="w-full bg-white h-10 px-5 pr-16 rounded-full text-sm focus:outline-none">
    
                               <button type="submit" class="py-2 px-4 bg-blue-400 text-white font-semibold rounded-full shadow-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-green-400 focus:ring-opacity-75 absolute right-0 top-0 mt-2 ">
                                   Clik Aqui
                                </button>
    
                     </div>
            </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="text-gray-700 text-center text-3xl mb-6">Contenido</h1>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/c1.jpg')}}" alt="">
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">
                            hola
                        </h1>
                    </header>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero inventore quis modi hic nihil cum qui, recusandae sed distinctio, </p>
                </figure>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/c2.jpg')}}" alt="">
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">
                            hola
                        </h1>
                    </header>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero inventore quis modi hic nihil cum qui, recusandae sed distinctio, </p>
                </figure>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/c3.jpg')}}" alt="">
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">
                            hola
                        </h1>
                    </header>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero inventore quis modi hic nihil cum qui, recusandae sed distinctio, </p>
                </figure>
            </article>

            <article>
                <figure>
                    <img class="rounded-xl h-36 w-full object-cover" src="{{asset('img/home/c4.jpg')}}" alt="">
                    <header class="mt-2">
                        <h1 class="text-center text-xl text-gray-700">
                            hola
                        </h1>
                    </header>
                    <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero inventore quis modi hic nihil cum qui, recusandae sed distinctio, </p>
                </figure>
            </article>
        </div>

    </section>

    <section class="mt-24 bg-gray-700 py-12">
       <h1 class="text-center text-white text-3xl">¿No conoces algun curso, evento, seminario o taller? </h1> 
       <p class="text-center text-white">Dirigete a nuestro catalogo de presentación</p>
          <div class="flex justify-center mt-4">
             <a href="{{route('cests.index')}}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                 CESTs
             </a>
          </div>
    </section>
</x-app-layout>

