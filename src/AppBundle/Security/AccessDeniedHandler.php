<?php
/**
 * Created by PhpStorm.
 * User: Arthur
 * Date: 15/06/2018
 * Time: 13:54
 */

namespace AppBundle\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;
use Twig\Environment;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
    /**
     * @var Environment
     */
    private $templating;

    public function __construct(Environment $templating)
    {
        $this->templating = $templating;
    }

    public function handle(Request $request, AccessDeniedException $accessDeniedException)
    {
        return $this->templating->render('@App/security/denied_access.html.twig');
    }
}