<section id="produto">
    <h2 class="titulo">Produtos</h2>
    <main class="container produtos">
        <div class="row">
            <div class="col">
                
                <figure>
                    <img src="./assets/img/poster/mirage.png" alt="">
                    <figcaption>
                        <h4>Assasins Creed</h4>
                        <span class="preco">R$10,00</span>
                        <span class="avaliacao">
                            <?php
                            for ($i=0; $i < 4; $i++) { 
                                echo '<i class="bi bi-star-fill"></i>';
                            }
                            ?>
                        </span>
                    </figcaption>
                </figure>
            </div>
        </div>

    </main>
</section>