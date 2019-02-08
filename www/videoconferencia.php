<?php
# Inicializa variáveis de menu
require_once("includes/resetvars.php");

# Ativando menu ativo no CSS
$index = 'class="active"';

# Inclui cabeçalho
include("includes/header.php");
?>
<section>
	<!-- start content -->
	<div class="conteudo">
		<h1>Instruções para Videoconferência</h1>
		<p>
			<strong>1) Notificando a seção de informática</strong>
			<br>
			Após informar a Seção de Pós-Graduação do dia/horário de sua defesa e aquele setor já ter feito a reserva da sala, 
			peencha o formulário de Eventos Remotos disponível neste link: 
			<a href="https://docs.google.com/forms/d/e/1FAIpQLSeUmqGC5HmguQjn7dBUBGg2R3X81AT1caIl5dD-koASfaOOcg/viewform" target="_blank">Formulário Videoconferência</a>
		</p>

		<p>
			<strong> 2) Agendamento</strong> 
			<br>
			O aluno deve providenciar ao menos <strong> 1 agendamento para conexão de teste </strong> entre as partes 
			para verificar condições dos equipamentos, som, imagem e compartilhamento de conteúdo.
			
			<br>
			
			<br>
			Caso possua mais de um membro remoto (por exemplo, dois membros da banca estão em cidades / países diferentes), 
			é recomendável que todos estejam presentes durante o teste.
		</p>
		
		<p>
			<strong>3) Como proceder</strong>  
			<br>
			Verifique dias e horários disponíveis para o agendamento. Consultar o sistema de Reserva de Salas da FFCLRP.
			<a href="http://sistemas.ffclrp.usp.br/reservas/reservas1.php" target="_blank">Acessar Sistema de Reservas FFCLRP</a>

			<ul>
				<li> Na seção <strong>"Visualizar Reservas"</strong>, na opção <strong>"Escolha um Bloco"</strong>, selecione: <strong>"02 - DF"</strong></li>
				<li> <strong>CLICAR</strong> no nome da sala para que o sistema carregue a agenda completa do mês atual.</li>
			</ul>
		</p>


		<p>
			<strong> 4) </strong> Agende a data do teste com a equipe técnica que estará remotamente e localmente.
			Falar com André Girol, ramal 15 0077, Técnico em Informática do Departamento de Física.
		</p>

		<h2>Considerações finais</h2>
		<p>
			Em caso de mudança de data ou desistência, comunicar imediatamente as partes envolvidas.
		</p>

		<p>
			É responsabilidade do Aluno procurar as seções responsáveis e agendar os testes do evento.
		</p>

	</div>
	
	<!-- end content -->
</section>

<?php
include("includes/footer.html")
?>
