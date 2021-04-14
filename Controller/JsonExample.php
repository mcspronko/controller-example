<?php

declare(strict_types=1);

namespace MageMastery\ControllerExample\Controller;

use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\Controller\Result\Json;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\Controller\ResultFactory;

class JsonExample implements HttpGetActionInterface
{
    private ResultFactory $resultFactory;

    /**
     * JsonExample constructor.
     * @param ResultFactory $resultFactory
     */
    public function __construct(ResultFactory $resultFactory)
    {
        $this->resultFactory = $resultFactory;
    }

    public function execute(): ResultInterface
    {
        /** @var Json $jsonResponse */
        $jsonResponse = $this->resultFactory->create(ResultFactory::TYPE_JSON);
        $jsonResponse->setData([
            'name' => 'Mage Mastery'
        ]);

        return $jsonResponse;
    }
}
