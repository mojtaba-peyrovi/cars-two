<?php
use \PHPUnit_Framework_TestCase;
use CarFaker\Provider\Car;
use Faker\Generator;

class CarTest extends \PHPUnit_Framework_TestCase
{
	public function setUp()
	{

	}

	public function testCarMake()
	{
		$carDataMock = $this->getMock('CarFaker\CarData');
		$testData = array('car make 1', 'car make 2', 'car make 3');
		$carDataMock->method('getCarMakes')
			->will($this->returnValue($testData));
		$generator = new Generator();
		$sut = new Car($generator, $carDataMock);
		$carMake = $sut->carMake();

		$this->assertTrue(in_array($carMake, $testData));
	}

	public function testCarModel()
	{
		$carDataMock = $this->getMock('CarFaker\CarData');
		$testData = array(
			'make 1' => array('model 1'),
			'make 2' => array('model 2'),
			'make 3' => array('model 3')
		);

		$carDataMock->method('getCarMakes')
			->will($this->returnValue(array_keys($testData)));

		$carDataMock->method('getCarModels')
			->will($this->returnCallback(function($make) use ($testData){
				return $testData[$make];
			}));
		$generator = new Generator();
		$sut = new Car($generator, $carDataMock);
		$carModel = $sut->carModel(true);
	}

	public function testCarModelVariant()
	{
		$carDataMock = $this->getMock('CarFaker\CarData');
		$testData = array(
			'make 1' => array(
				'model 1' => array('variant 1')
				),
			'make 2' => array(
				'model 2' => array('variant 2')
				),
			'make 3' => array(
				'model 3' => array('variant 3')
				)
			);

		$carDataMock->method('getCarMakes')
			->will($this->returnValue(array_keys($testData)));

		$carDataMock->method('getCarModels')
			->will($this->returnCallback(function($make) use ($testData){
				return array_keys($testData[$make]);
			}));

		$carDataMock->expects($this->once())
			->method('getCarModelVariants')
			->will($this->returnCallback(function($make, $model) use ($testData){
				return $testData[$make][$model];
			}));

		$generator = new Generator();
		$sut = new Car($generator, $carDataMock);
		$carModelVariant = $sut->carModelVariant(false);

		$variantFound = false;
		foreach ($testData as $make => $models) {
			foreach ($models as $model => $variants) {
				$variantFound = in_array($carModelVariant, $variants);
				if ($variantFound) break;
			}
			if ($variantFound) break;
		}

		$this->assertTrue($variantFound);
	}

	public function testCarBodyType()
	{
		$carDataMock = $this->getMock('CarFaker\CarData');
		$testData = array('car body 1', 'car body 2', 'car body 3');
		$carDataMock->method('getCarBodyTypes')
			->will($this->returnValue($testData));

		$generator = new Generator();
		$sut = new Car($generator, $carDataMock);
		$carBodyType = $sut->carBodyType();

		$this->assertTrue(in_array($carBodyType, $testData));
	}

	public function testCarFuelType()
	{
		$carDataMock = $this->getMock('CarFaker\CarData');
		$testData = array('car fuel 1', 'car fuel 2', 'car fuel 3');
		$carDataMock->method('getCarFuelTypes')
			->will($this->returnValue($testData));

		$generator = new Generator();
		$sut = new Car($generator, $carDataMock);
		$carFuelType = $sut->carFuelType();

		$this->assertTrue(in_array($carFuelType, $testData));
	}

	public function testCarTransmissionType()
	{
		$carDataMock = $this->getMock('CarFaker\CarData');
		$testData = array('car transmission 1', 'car transmission 2', 'car transmission 3');
		$carDataMock->method('getCarTransmissionTypes')
			->will($this->returnValue($testData));

		$generator = new Generator();
		$sut = new Car($generator, $carDataMock);
		$carTransmissionType = $sut->carTransmissionType();

		$this->assertTrue(in_array($carTransmissionType, $testData));
	}
}

?>
