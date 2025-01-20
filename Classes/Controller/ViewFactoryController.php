<?php

namespace Passionweb\ViewFactory\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Core\View\ViewFactoryData;
use TYPO3\CMS\Core\View\ViewFactoryInterface;
use TYPO3\CMS\Extensionmanager\Controller\AbstractController;


class ViewFactoryController extends AbstractController
{
    public function __construct(
        private readonly ViewFactoryInterface $viewFactory
    ) {}

    public function initAction(): ResponseInterface
    {
        $viewFactoryData = new ViewFactoryData(
            templateRootPaths: ['EXT:viewfactory/Resources/Private/Templates'],
            partialRootPaths: ['EXT:viewfactory/Resources/Private/Partials'],
            layoutRootPaths: ['EXT:viewfactory/Resources/Private/Layouts']
        );
        $view = $this->viewFactory->create($viewFactoryData);
        $output = $view->render('ViewFactory/Init.html');
        return $this->htmlResponse($output);
    }
}
