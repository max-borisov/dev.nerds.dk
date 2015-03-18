<?php
/* @var $this yii\web\View */
$this->title = 'Atricles';
?>

<article class="col-sm-9">
    <h1>Artikler</h1>
    <form>
        <div class="row">
            <div class="col-sm-9">
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="filter">Filtrér:</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="Email" id="filter" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <button type="submit" class="btn btn-primary">Søg</button>
                <a class="btn btn-default" href="#">Slet</a>
            </div>
        </div>
    </form>
    <nav class="pagination-holder">
        <ul class="pagination">
            <li class="disabled">
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li class="disabled"><a href="#">...</a></li>
            <li><a href="#">19</a></li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
    <div class="table-responsive">
        <table class="table table-hover articles-table">
            <tbody>
            <tr>
                <td><a href=""><img class="w-200" src="/images/news-img01.jpg" alt=""/></a></td>
                <td>
                    <strong><a href="#">Hifi & Surround 2014</a></strong>
                    <p>Redaktionen var traditionen tro med på årets største hifimesse, og vi bringer her en grundig gennemgang.</p>
                </td>
                <td>27/12-2014</td>
            </tr>
            <tr>
                <td><a href=""><img class="w-200" src="/images/news-img02.jpg" alt=""/></a></td>
                <td>
                    <strong><a href="#">JJ Teknik / AV Centrum</a></strong>
                    <p>Vi tog til Farum og besøgte ikke bare landets Zingali og Xindak importør, men også en af de mest kendte hifi-værksteder.</p>
                </td>
                <td>27/12-2014</td>
            </tr>
            <tr>
                <td><a href=""><img class="w-200" src="/images/articles-img01.jpg" alt=""/></a></td>
                <td>
                    <strong><a href="#">eff Rowland-event hos Holm Acoustics</a></strong>
                    <p>Når man får et nyt mærke ind, så inviterer man naturligvis ophavsmanden forbi til at fortælle pressen og stamkunder om det nye tiltag...</p>
                </td>
                <td>05/08-2014</td>
            </tr>
            <tr>
                <td><a href=""><img class="w-200" src="/images/articles-img02.jpg" alt=""/></a></td>
                <td>
                    <strong><a href="#">Lydportalen - Danmarks gladeste hififorretning</a></strong>
                    <p>Midt i Lyngby ligger en af landets største forhandlere af Audiovector og godt humør</p>
                </td>
                <td>19/07-2014</td>
            </tr>
            <tr>
                <td><a href=""><img class="w-200" src="/images/articles-img03.jpg" alt=""/></a></td>
                <td>
                    <strong><a href="#">SA demo hos AV Connection</a></strong>
                    <p>System Audio og AV Connection inviterede til demo med den unikke Pandion højttaler der er skabt via ingeniør-crowd-sourcing</p>
                </td>
                <td>28/06-2014</td>
            </tr>
            <tr>
                <td><a href=""><img class="w-200" src="/images/articles-img04.jpg" alt=""/></a></td>
                <td>
                    <strong><a href="#">Billeder fra München 2014</a></strong>
                    <p>Vi har været så heldige at få en masse billeder fra messen i München</p>
                </td>
                <td>19/05-2014</td>
            </tr>
            <tr>
                <td><a href=""><img class="w-200" src="/images/articles-img05.jpg" alt=""/></a></td>
                <td>
                    <strong><a href="#">Highend demo med High Performance Audio</a></strong>
                    <p>Vi var med da der blev budt på highend digital og vinyldemo med Estelon højttalere, Vitus elektronik, Aurender streamer og VPI pladespiller.</p>
                </td>
                <td>11/05-2014</td>
            </tr>
            <tr>
                <td><a href=""><img class="w-200" src="/images/articles-img06.jpg" alt=""/></a></td>
                <td>
                    <strong><a href="#">Electrocompaniet demo</a></strong>
                    <p>Medlyd inviterede til demo med Electrocompaniets nyeste HD film og musik streamer samt highendhøjttaleren Nordic Tone - vi var på pletten</p>
                </td>
                <td>02/05-2014</td>
            </tr>
            <tr>
                <td><a href=""><img class="w-200" src="/images/articles-img07.jpg" alt=""/></a></td>
                <td>
                    <strong><a href="#">Audiovector demo hos Lydportalen</a></strong>
                    <p>Audiovectors grundlægger Ole Klifoth kiggede forbi Lyngby for at demonstrere det nye trådløse og aktive Discreet system.</p>
                </td>
                <td>02/04-2014</td>
            </tr>
            </tbody>
        </table>
    </div>
    <nav class="pagination-holder">
        <ul class="pagination">
            <li class="disabled">
                <a href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li><a href="#">6</a></li>
            <li><a href="#">7</a></li>
            <li class="disabled"><a href="#">...</a></li>
            <li><a href="#">19</a></li>
            <li>
                <a href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </nav>
</article>