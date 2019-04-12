@extends('layout.base')

@section('conteudo')
<script type="text/javascript">

window.showAlert = function(){
    alertify.alert('Alerta', 'Olá, Oficineir@s!<br /><br />Nossos encontros, no mês de abril, já estão agendados!<br/><br/>Quando? 12 e 26 de abril (sextas-feiras)<br/>Horário? Das 14h às 15h30<br/>Local? <b>Miniauditório (Lab. Turismo - Prédio Anexo - 2º andar)</b><br/><br/><a href="/selecionados">Clique aqui</a> para consultar a Lista de Selecionados<br/><br/>Até logo!');
}
//works with modeless too
alertify.alert().setting('modal', false);

window.showAlert();

</script>

  <div class="row" >
  
          <div class="col-md-8 offset-md-2">
            <h1 class="btn btn-info btn-lg " id="objetivo" role="button"></a>Objetivo</h1>
            <p class="justificar">Promover a interpretação de textos pertencentes a diversos gêneros discursivos e a escrita de textos em prosa, do tipo dissertativo-argumentativo, sobre um tema de ordem social, científica, cultural ou política.</p>
            <br /><br />
          </div>

          <div class="col-md-8 offset-md-2">
            <h2 class="btn btn-info btn-lg " id="metodologia" role="button">Metodologia</h2>
            <p class="justificar">Esta Oficina é semipresencial e oferece um site, que foi projetado por dois professores e três alunas do 3º ano de Informática do IFRN - Campus Canguaretama, para a orientação dos estudos dos participantes. As redações propostas e as atividades devem ser entregues semanalmente no horário definido dos encontros. Para refletir sobre o processo de escrita, ao final de cada mês, o oficineiro participará de rodas de conversa sobre as redações avaliadas.</p>
            <br /><br />
          </div>

          <div class="col-md-8 offset-md-2">
            <h2 class="btn btn-info btn-lg " id="publico" role="button">Público-alvo</h2>
            <p class="justificar">Discentes do 4º ano do IFRN - Campus Canguaretama. Discentes de outras séries também podem participar se houver disponibilidade de vagas.</p>
            <br /><br />
          </div>

          <div class="col-md-8 offset-md-2">
            <h2 class="btn btn-info btn-lg " id="duracao" role="button">Duração</h2>
            <p class="justificar">Oficina de produção textual será oferecida de abril a outubro, excetuando o mês de julho.</p>
            <br /><br />
          </div>

          <div class="col-md-8 offset-md-2">
            <h2 class="btn btn-info btn-lg " id="carga" role="button">Carga horária e certificação</h2>
            <p class="justificar">4 horas semanais. Para obter o certificado, é necessário cumprir as atividades solicitadas e a frequência nos seis meses da Oficina </p>
            <br /><br />
          </div>

          <div class="col-md-8 offset-md-2">
            <h2 class="btn btn-info btn-lg " id="o_que_e" role="button">O que é preciso para participar?</h2>
            <p class="justificar">Dispor de 4 horas semanais para se dedicar à oficina.</p>
            <br /><br />
          </div>

          <div class="col-md-8 offset-md-2">
            <h2 class="btn btn-info btn-lg " id="como_inscrever" role="button">Como posso fazer minha inscrição?</h2>
            <p class="justificar">A inscrição poderá ser feita a partir das 13h (horário de Brasília) do dia 01/04 e vai até 23h59 do dia 03/04. Devem ser realizadas exclusivamente pela internet, por meio deste site.</p>
            <br /><br />
          </div>
			
        </div>


@endsection



