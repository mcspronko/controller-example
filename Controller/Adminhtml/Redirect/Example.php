<?php

declare(strict_types=1);

namespace MageMastery\ControllerExample\Controller\Adminhtml\Redirect;

use Magento\Backend\Model\UrlInterface;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Framework\Controller\ResultInterface;

class Example implements HttpGetActionInterface
{
    /**
     * @var RedirectFactory
     */
    private $redirectFactory;

    /**
     * @var UrlInterface
     */
    private $url;

    /**
     * Example constructor.
     * @param RedirectFactory $redirectFactory
     * @param UrlInterface $url
     */
    public function __construct(
        RedirectFactory $redirectFactory,
        UrlInterface $url
    ) {
        $this->redirectFactory = $redirectFactory;
        $this->url = $url;
    }

    public function execute(): ResultInterface
    {
        return $this->redirectFactory->create()
            ->setUrl($this->url->getUrl('cms/page'));
    }
}
