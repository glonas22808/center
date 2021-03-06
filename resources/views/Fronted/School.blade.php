
@extends('fronted.Loyats')
@section('Schoolinfo')
    <img src="https://www.justtalkeng.ru/upload/iblock/bcf/bcfa5daba56c8b86900440327ed6828b.jpg" class="img-fluid" alt="Адаптивные изображения" id="SchoolImg">
    <div class="container-fluid" id ="Text" >
        <div class="container row justify-content-center">
            <div class="col-md-8 blog-main">
                <h3 class="pb-3 mb-4 font-italic border-bottom">
                    Комплексная подготовка к школе
                </h3>
                <div class="post" >
                    <p>Когда начинать подготовку малыша к школе? Это не простой вопрос. Дело в том, что школа – это совершенно новая среда для ребенка, в которую он будет погружён несколько лет. Меняется все: степень нагрузки, уровень и стиль общения со сверстниками и взрослыми, степень ответственности. Чтобы это не стало сюрпризом и для ребенка, и для Вас, необходимо как можно раньше подготовить его ко всему этому. Здесь мы готовы помочь Вам.</p>
                   <p>Чтобы не перегружать ребенка информацией и в то же время вложить и усовершенствовать все необходимые навыки, подготовку ребенка к школе нужно проводить заранее и постепенно. Поэтому мы предлагаем занятия по подготовке ребенка к школе с 3-х лет. Программы составлены так, что форма занятий и виды деятельности чередуются. Многие из них проходят в игровой форме. Это позволяет развивать навык быстрого переключения внимания и способов работы. Все занятия отлично вписываются в рамки стандартного школьного урока, что позволяет воспитать в ребенке умение управлять своим временем и укладываться в те или иные временные рамки. В процессе подготовки программы занятий могут быть скорректированы в зависимости от степени развития ребенка и его способностей к обучению. Занятия проводятся два раза в неделю.</p>
                    <p>Комплексная программа позволит:</p>
                    <ul>
                        <li>развить моторику, что совершенно необходимо для правильного письма;</li>
                        <li>развить навыки мышления, запоминания и обработки информации (внимание, память и т.п.);</li>
                        <li>сформировать представление о математике и математических понятиях, а также понимание пространства и времени;</li>
                        <li>обогатить словарный запас ребёнка, развить навыки речи и чтения;</li>
                        <li>познакомить ребенка с другими языками на примере английского;</li>
                        <li>расширить представление о предметах и явлениях окружающего мира;</li>
                        <li>развить воображение, образное и творческое мышление;</li>
                        <li>подготовить ребенка к школьному тестированию.</li>
                    </ul>
                    <p>Работа с детьми в развивающем центре «Знание» начинается, как и в школе, с проверки психологической готовности малыша к обучению. Этим занимаются специалисты нашего центра — психолог и логопед. Это требуется для того, чтобы своевременно выявить отклонения и задержки в развитии ребенка, понять их причины и принять меры для устранения отрицательных последствий до того, как малыш пойдет в первый класс школы. Поскольку одним из важнейших факторов успешности собеседования в школе является естественность происходящего, мы создаем на занятиях с детьми максимально доброжелательную и комфортную атмосферу. Однако очень многое зависит и от родителей — ведь для того, чтобы ребенку было легко, комфортно и интересно учиться, у него должны быть развиты такие навыки как:</p>
                    <ul>
                        <li>внимание;</li>
                        <li>восприятие;</li>
                        <li>воображение;</li>
                        <li>мышление;</li>
                        <li>память;</li>
                        <li>речь.</li>
                    </ul>
                    <p>Если выявляются какие-либо психологические или логопедические проблемы, наши специалисты проведут индивидуальные занятия с ребенком. Подобные занятия помогут лучше раскрыть для малыша тонкости отношений родитель-ребенок, провести психологическую настройку на способность к быстрой смене сценариев общения и отношений. Педагог-логопед сможет провести коррекционные занятия для улучшения дикции и произношения звуков.</p>
                    <p>По окончании собеседования с ребенком родители также получают рекомендации по общению с ним, советы о том, на какие аспекты развития ребенка следует обратить особое внимание. Разумеется, заключения специалистов учитываются и при подготовке обучающей программы, которую малыш будет проходить в нашем развивающем центре.</p>
                    <p>Также в целях развития речи, памяти, логического мышления и других навыков мы предлагаем обучение английскому языку. Программа составлена на основе материалов, интересных детям этого возраста. Обучение проводится в игровой форме. Группы формируются в начале сентября. Количеств детей в каждой группе — 10–12 человек.</p>
                    <p>Хотите знать больше о нашей работе? Всё, что Вам нужно Вы найдёте на страницах этого сайта.</p>

                    @if($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                            </ul>
                        </div>
                    @endif

                        <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success btn-outline-dark" data-toggle="modal" data-target="#exampleModalCenter">
                                Оставить заявку онлайн
                            </button>
                    <form action="/School/submit" method="post">
                    @csrf
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Оставить заявку</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                            <div class="order-md-2">
                        <div class="form-group">
                            <label for="name">Введите имя</label>
                            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" placeholder="Email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="telefon">Телефон</label>
                            <input type="text" name="telefon" placeholder="Номер телефона" id="telefon" class="form-control">
                        </div>
                            </div>
                        <button type="submit" class="btn btn-success btn-outline-dark" >Отправить!</button>
                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    @endsection
