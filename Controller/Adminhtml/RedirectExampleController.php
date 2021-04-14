<?php

declare(strict_types=1);

namespace MageMastery\ControllerExample\Controller\Adminhtml;

use Magento\Backend\Model\UrlInterface;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Framework\Controller\ResultInterface;

class RedirectExampleController implements HttpGetActionInterface
{
    private RedirectFactory $redirectFactory;

    private UrlInterface $url;

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
            ->setUrl($this->url->getUrl('admin/*/*'));
    }
}
