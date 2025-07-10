import { ArrowUpIcon, ArrowDownIcon } from '@heroicons/react/24/solid'

interface KpiCardProps {
  kpi: {
    id: number
    titulo: string
    valor: number
    variacao_percentual: number
  }
}

export default function KpiCard({ kpi }: KpiCardProps) {
  const formatValue = () => {
    if (kpi.titulo.includes('Vendas')) {
      return new Intl.NumberFormat('pt-BR', {
        style: 'currency',
        currency: 'BRL'
      }).format(kpi.valor)
    }
    return kpi.valor.toLocaleString()
  }

  const isPositive = kpi.variacao_percentual >= 0
  const Icon = isPositive ? ArrowUpIcon : ArrowDownIcon
  const colorClass = isPositive ? 'text-green-500' : 'text-red-500'

  return (
    <div className="bg-white rounded-lg shadow p-6 transition-transform hover:-translate-y-1 h-full">
      <h3 className="text-gray-600 text-sm font-medium mb-4">{kpi.titulo}</h3>
      <p className="text-3xl font-bold mb-2">{formatValue()}</p>
      <div className={`flex items-center ${colorClass}`}>
        <Icon className="h-4 w-4 mr-1" />
        <span>{kpi.variacao_percentual}%</span>
      </div>
    </div>
  )
}