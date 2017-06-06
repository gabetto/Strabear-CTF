<?php

$lang['sorry'] = 'Desculpe';
$lang['after_release'] = 'Após liberar';
$lang['position'] = 'Posição';
$lang['team'] = 'Time';
$lang['points'] = 'Pontos';
$lang['points_short'] = 'pts';
$lang['country'] = 'País';
$lang['solved'] = 'Resolvido';
$lang['home'] = 'Início';
$lang['profile'] = 'Perfil';
$lang['scores'] = 'Pontuação';
$lang['log_in'] = 'Entrar';
$lang['log_out'] = 'Sair';
$lang['close'] = 'Fechar';
$lang['error'] = 'Erro';
$lang['profile_settings'] = 'Configurações de perfil';
$lang['view_public_profile'] = 'Ver perfil público';
$lang['hint'] = 'Dica';
$lang['hints'] = 'Dicas';
$lang['no_hints_available'] = 'Nenhuma dica disponivel até o momento.';
$lang['challenge'] = 'Desafio';
$lang['added'] = 'Adicionado';
$lang['challenges'] = 'Desafios';
$lang['category'] = 'Categoria';
$lang['ctf_empty'] = 'Seu CTF parece estar um pouco vazio! Comece adicionando uma categoria usando o painel de administrador';
$lang['available_in'] = 'Disponivel em';
$lang['cat_unavailable'] = 'Categoria inexistente';

$lang['two_factor_auth'] = 'Autenticação em duas etapas';
$lang['two_factor_auth_required'] = 'Autenticação em duas etapas requerida';
$lang['enable_two_factor_auth'] = 'Ativar autenticação em duas etapas';
$lang['disable_two_factor_auth'] = 'Desativar autenticação em duas etapas';
$lang['generate_codes'] = 'Gerar códigos';
$lang['using_totp'] = 'Usando TOTP';
$lang['scan_with_totp_app'] = 'Procurar por seu TOTP app';
$lang['authenticate'] = 'Autenticado';

$lang['save_changes'] = 'Salvar alterações';
$lang['reset_password'] = 'Redefinir senha';
$lang['choose_password'] = 'Escolha a senha';
$lang['password'] = 'Senha';
$lang['email_password_on_signup'] = 'Um email de confirmação contendo uma senha aleatória será enviado para o endereço escolhido.';

$lang['register'] = 'Registrar';
$lang['register_your_team'] = 'Registre seu time';
$lang['account_signup_information'] = 'Seu time compartilha uma conta. {password_information}';
$lang['team_name'] = 'Nome do time';
$lang['select_team_type'] = 'Por favor, escolha o tipo de time';
$lang['registration_closed'] = 'No momento os registos estão encerrados, mas você pode <a href="interest">registrar seu interesse para próximos eventos</a>.';
$lang['please_fill_details_correctly'] = 'Favor preencher todos os dados corretamente.';
$lang['invalid_team_type'] = 'Este não parece ser um tipo de time válido.';
$lang['team_name_too_long_or_short'] = 'O nome do seu time é muito extenso ou muito curto.';
$lang['email_not_whitelisted'] = 'Este email não consta em nossa Lista Branca.Favor selecionar um email que conta em nossa lista ou contactar os organizadores.';
$lang['user_already_exists'] = 'Nome do time ou email ja esta registrado em uma conta.';
$lang['signup_successful'] = 'Inscrição efetuada com sucesso!';
$lang['signup_successful_text'] = 'Obrigado por se registrar! Seu email é: {email}. Certifique- se de olhar sua pasta de spam pois nossos emails podem ser direcionados para ela. Fique ligado em nossas atualizações!';
$lang['your_password_is'] = 'Sua senha é';
$lang['your_password_was_set'] = 'Sua senha foi escolhida por você ao se cadastrar.';

$lang['signup_email_subject'] = '{site_name} Detalhes da conta';
$lang['signup_email_success'] =
    '{team_name}, seu registro em {site_name} foi concluido com sucesso.' .
    "\r\n" .
    "\r\n" .
    '{signup_email_availability}' .
    "\r\n" .
    "\r\n" .
    '{signup_email_password}' .
    "\r\n" .
    "\r\n" .
    'Fique atento em nossas atualizações!' .
    "\r\n" .
    "\r\n" .
    'Saudações,' .
    "\r\n" .
    '{site_name}'
;
$lang['signup_email_account_availability_message_login_now'] = 'You can now log in using your email and chosen password.';
$lang['signup_email_account_availability_message_login_later'] = 'Once the competition starts, please use this email address to log in.';

$lang['register_interest'] = 'Register interest';
$lang['register_interest_text'] = 'We are likely to run more CTFs in the future. Input your email below if you are interested in hearing from us about future competitions. We will not spam you. Your email address will not be shared with third parties.';

$lang['expression_of_interest'] = 'Expression of interest';
$lang['recruitment_text'] = 'Like the look of our sponsors? They are all hiring. Please fill out the form below if you wish to be contacted with recruitment information. Each team member can fill out the form individually. We will not share your details with anyone but our sponsors. We will not spam you. Only addresses entered into this form will be shared.';
$lang['name_optional'] = 'Name (optional)';
$lang['city_optional'] = 'City (optional)';

$lang['email_address'] = 'Email address';
$lang['password'] = 'Password';
$lang['name_nick'] = 'Name / team name / nick';
$lang['remember_me'] = 'Remember me';
$lang['forgotten_password'] = 'I\'ve forgotten my password';

$lang['please_request_view'] = 'Please request a view';
$lang['please_request_page'] = 'Please request a page to show';
$lang['please_supply_country_code'] = 'Please supply a valid country code';
$lang['not_a_valid_link'] = 'That is not a valid link.';
$lang['not_a_valid_email'] = 'That doesn\'t look like an email. Please go back and double check the form.';
$lang['please_select_country'] = 'Please select a country';

$lang['no_file_found'] = 'No file found with this ID.';
$lang['invalid_team_key'] = 'Invalid team key.';
$lang['user_not_enabled'] = 'This user is not enabled, and can as such not download files.';
$lang['file_not_available'] = 'This file is not available yet.';

$lang['challenge_details'] = 'Challenge details';
$lang['no_challenge_for_id'] = 'No challenge found with this ID, or challenge not public';
$lang['no_category_for_id'] = 'No category found with that ID, or category not public';
$lang['challenge_not_available'] = 'This challenge is not yet available';
$lang['challenge_not_solved'] = 'This challenge has not yet been solved by any teams.';
$lang['challenge_solved_by_percentage'] = 'This challenge has been solved by {solve_percentage}% of actively participating users.';

$lang['challenge_solved_first'] = 'First to solve this challenge!';
$lang['challenge_solved_second'] = 'Second to solve this challenge!';
$lang['challenge_solved_third'] = 'Third to solve this challenge!';

$lang['correct_flag'] = 'Correct flag, you are awesome!';
$lang['incorrect_flag'] = 'Incorrect flag, try again.';
$lang['submission_awaiting_mark'] = 'Your submission is awaiting manual marking.';
$lang['please_enter_flag'] = 'Please enter flag for challenge:';
$lang['submit_flag'] = 'Submit flag';
$lang['no_remaining_submissions'] = 'You have no remaining submission attempts. If you have made an erroneous submission, please contact the organizers.';

$lang['no_category_with_id'] = 'No category found with that ID';

$lang['cat_unavailable_explanation'] = 'This category is not available. It is open from {available_from} ({available_from_time_remaining} from now) until {available_until} ({available_until_time_remaining} from now)';

$lang['hidden_challenge_worth'] = 'Hidden challenge worth {pts}pts';

$lang['available_in'] = 'Available in {available_in} (from {from} until {to})';
$lang['minimum_time_between_submissions'] = 'Minimum of {time} between submissions.';
$lang['num_submissions_remaining'] = '{num_remaining} submissions remaining.';
$lang['time_remaining'] = '{time} remaining';

$lang['challenge_relies_on'] = 'The details for this challenge will be displayed only after {relies_on_link} in the {relies_on_category_link} category has been solved (by any team).';

$lang['no_reset_data'] = 'No reset data found.';

$lang['scoreboard'] = 'Placar';
$lang['first_solvers'] = 'First solvers';
$lang['percentage_solvers'] = 'Resolvido por';
$lang['unsolved'] = 'Não resolvido';

$lang['user_details'] = 'User details';
$lang['no_user_found'] = 'No user found with that ID';
$lang['non_competing_user'] = 'This user is listed as a non-competitor.';
$lang['no_information'] = 'No information';
$lang['no_solves'] = 'This user has not solved any challenges yet!';
$lang['no_exceptions'] = 'No exceptions for this user';
$lang['solved_challenges'] = 'Solved challenges';
$lang['total_solves'] = 'Total:';
$lang['no_challenges_solved'] = 'No challenges solved, yet!';

$lang['action_success'] = 'Success!';
$lang['action_failure'] = 'Failure!';
$lang['action_something_went_wrong'] = 'Something went wrong! Most likely the action you attempted has failed.';
$lang['generic_error'] = 'Something went wrong.';

$lang['year'] = 'year';
$lang['month'] = 'month';
$lang['day'] = 'day';
$lang['hour'] = 'hour';
$lang['minute'] = 'minute';
$lang['second'] = 'second';
$lang['append_to_time_to_make_plural'] = 's';

$lang['user_class_user'] = 'User';
$lang['user_class_moderator'] = 'Moderator';
$lang['user_class_unknown'] = 'Unknown user class';

$lang['manage'] = 'Gerenciar';
$lang['add_news_item'] = 'Add news item';
$lang['list_news_item'] = 'List news items';
$lang['news'] = 'News';

$lang['categories'] = 'Categorias';
$lang['add_category'] = 'Adicionar categorias';
$lang['list_categories'] = 'Listar categorias';

$lang['add_challenge'] = 'Adicionar desafio';
$lang['list_challenges'] = 'Listar desafios';

$lang['submissions'] = 'Submissões';
$lang['list_submissions_in_need_of_marking'] = 'List submissions in need of marking';
$lang['list_all_submissions'] = 'List all submissions';

$lang['users'] = 'Usuários';
$lang['list_users'] = 'Listar usuários';
$lang['user_types'] = 'Tipos de usuários';
$lang['add_user_type'] = 'Adicionar tipo de usuário';
$lang['list_user_types'] = 'Listar tipos de usuários';

$lang['signup_rules'] = 'Regas de inscruição';
$lang['list_rules'] = 'Listar regras';
$lang['new_rule'] = 'Nova regra';
$lang['test_rule'] = 'Regra de teste';

$lang['single_email'] = 'Email individual';
$lang['email_all_users'] = 'Email all users';

$lang['new_hint'] = 'Nova dica';
$lang['list_hints'] = 'Listar dicas';

$lang['dynamic_content'] = 'Conteudo dinâmico';
$lang['new_menu_item'] = 'Novo menu de itens';
$lang['list_menu_items'] = 'Listar menus';
$lang['menu'] = 'Menu';
$lang['new_page'] = 'Nova página';
$lang['list_pages'] = 'Listar páginas';
$lang['pages'] = 'Páginas';

$lang['exceptions'] = 'Exceções';
$lang['list_exceptions'] = 'Listar exceções';
$lang['clear_exceptions'] = 'Limpar exceções';

$lang['search'] = 'Procurar';
