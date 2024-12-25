import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Link } from '@inertiajs/react';

export default function Index({ products }) {
    return (
        <AuthenticatedLayout>
        <div className="max-w-7xl mx-auto px-4 py-8">
            <h1 className="text-3xl font-bold text-center text-green-700 mb-8">ผักออแกนิค</h1>
            <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                {products.map((product) => (
                    <div
                        key={product.id}
                        className="bg-white border border-gray-200 rounded-lg shadow hover:shadow-lg transition-shadow duration-300"
                    >
                        <Link href={`/products/${product.id}`} className="block">
                            <img
                                src={product.image}
                                alt={product.name}
                                className="w-full h-48 object-cover rounded-t-lg"
                            />
                            <div className="p-4">
                                <h2 className="text-lg font-semibold text-gray-800 mb-2">
                                    {product.name}
                                </h2>
                                <p className="text-green-600 font-bold text-lg">
                                    {product.price} Baht
                                </p>
                            </div>
                        </Link>
                        {/* <div className="p-4 flex justify-end">
                            <button className="flex items-center px-3 py-2 bg-green-500 text-white text-sm font-medium rounded-lg shadow hover:bg-green-600 transition">
                                เพิ่มลงตะกร้า
                            </button>
                        </div> */}
                    </div>
                ))}
            </div>
        </div>
        </AuthenticatedLayout>
    );
}
