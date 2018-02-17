<?php

namespace AppBundle\Controller\Api\v1;

use AppBundle\Controller\BaseController;
use AppBundle\Service\FizzBuzz;
use AppBundle\Service\Fibonacci;
use AppBundle\Utils\Person;
use AppBundle\Utils\Constants;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends BaseController
{
    /**
     * @Route("/", name="home")
     * @Method("GET")
     */
    public function homeAction()
    {
        $data = [
            'author' => Constants::PROJECT_AUTHOR
        ];

        $response = $this->createApiResponse($data, 200);
        return $response;
    }

    /**
     * @Route("/fizzbuzz", name="fizzbuzz")
     * @Method("GET")
     */
    public function fizzBuzzAction()
    {
        $fizzBuzz = new FizzBuzz();
        $result = $fizzBuzz->fizzBuzz();

        $data = $this->serializeFizzBuzzResponse(Constants::PROJECT_AUTHOR, $result);

        $response = $this->createApiResponse($data, 200);
        return $response;
    }

    /**
     * @Route("/fibonacci", name="fibonacci")
     * @Method("GET")
     */
    public function fibonacciAction()
    {
        $fibonacci = new Fibonacci();
        $fibonacci5 = $fibonacci->fibonacci(5);
        $fibonacci10 = $fibonacci->fibonacci(10);
        $fibonacci1 = $fibonacci->fibonacci(1);

        $data = $this->serializeFibonacciResponse(Constants::PROJECT_AUTHOR, $fibonacci5, $fibonacci10, $fibonacci1);

        $response = $this->createApiResponse($data, 200);
        return $response;
    }

    /**
     * @Route("/magicGetterSetter", name="magicGetterSetter")
     * @Method("GET")
     */
    public function magicGetterSetterAction()
    {
        $person = new Person('John', 'Doe', 20);
        $firstState = $person->description;
        $person->firstname = 'George';
        $person->lastname = 'Lympe';
        $person->age = 40;
        $updatedState = $person->description;

        $data = $this->serializeMagicGetterSetterResponse(Constants::PROJECT_AUTHOR, $firstState, $updatedState);

        $response = $this->createApiResponse($data, 200);
        return $response;
    }

    /**
     * @param string $author
     * @param array $result
     * @return array
     */
    private function serializeFizzBuzzResponse(string $author, array $result) : array
    {
        return $data = [
            'author' => $author,
            'result' => $result
        ];
    }

    /**
     * @param string $author
     * @param array $fibonacci5
     * @param array $fibonacci10
     * @param array $fibonacci1
     * @return array
     */
    private function serializeFibonacciResponse(string $author, array $fibonacci5, array $fibonacci10, array $fibonacci1 ) : array
    {
        return $data = [
            'author' => $author,
            'fibonacci(5)' => $fibonacci5,
            'fibonacci(10)' => $fibonacci10,
            'fibonacci(1)' => $fibonacci1
        ];
    }

    /**
     * @param string $author
     * @param string $firstState
     * @param string $updatedState
     * @return array
     */
    private function serializeMagicGetterSetterResponse(string $author, string $firstState, string $updatedState ) : array
    {
        return $data = [
          'author' => $author,
          'first_state' => $firstState,
          'updated_state' => $updatedState
        ];
    }
}
